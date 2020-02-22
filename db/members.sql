-- Table: public.members

-- DROP TABLE public.members;

CREATE TABLE public.members
(
    id integer NOT NULL DEFAULT nextval('members_id_seq'::regclass),
    username character varying(100) COLLATE pg_catalog."default" NOT NULL,
    password character varying(255) COLLATE pg_catalog."default" NOT NULL,
    fname character varying(100) COLLATE pg_catalog."default" NOT NULL,
    lname character varying(100) COLLATE pg_catalog."default" NOT NULL,
    email character varying(100) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT members_pkey PRIMARY KEY (id),
    CONSTRAINT name UNIQUE (username)
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.members
    OWNER to xlyavewwvaqkzy;